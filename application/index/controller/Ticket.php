<?php
namespace app\index\controller;
use think\Controller;
use think\request;
use think\Db;
use think\Cookie;
use think\cache\driver\Redis;
use think\cache\driver\Memcache;
class Ticket extends Controller
{
    //门票购买页面
    public function index()
    {

        $arr = Db("ticket")->alias('t')->join("scenic s","t.scenic_id = s.scenic_id")->where("t_id",input("t_id"))->find();
        return view('index',['arr'=>$arr]);

    }
    //店铺展示页
    public function  seller()
    {
        $arr = Db("seller_shop")->where("shop_status = 1")->select();
        return view("seller",['arr'=>$arr]);
    }
    //食品购买页面
    public function food()
    {
        $arr = Db("goods")->where("goods_id", input("goods_id"))->find();
        // print_r($arr);die;
    	return view('food',['arr'=>$arr]);
    }
    //食品确认订单页面
    public function foodOrder()
    {
        $data = request()->param();
        $u_name = cookie('user');
        $data['u_id'] = Db("user")->where("u_name",$u_name['u_name'])->value("u_id");
        $data['buy_time'] = strtotime($data['buy_time']);
        $data['order_sn'] = date('Ymd').str_pad(rand(1000, 99999), 5, '0', STR_PAD_LEFT);

        print_r($data);die;
        return view("foodorder");
    }

    /**
     * 添加购物车
     * @return [type] [description]
     */
    public  function buyCar()
    {
        $res = array();
        $data = request()->param();
        $u_name = Cookie::get('user');

        if(empty($u_name)){
            $res['available'] = 1;
        }else{
            $data['u_id'] = Db("user")->where("u_name",$u_name['u_name'])->value("u_id");
            // var_dump($data);die;
            $data['goods_sn'] = date('Ymd').str_pad(rand(1000, 99999), 5, '0', STR_PAD_LEFT).rand(1000,9999);
            // print_r($data);die;
            $arr = Db::table("buycar")->insert($data);
            if($arr){
                $res['available'] = 2;
            }
        }
        return json($res);

    }

    /**
     * 购物车展示页
     * @return [type] [description]
     */
    public function buyCarList()
    {
        $u_name = cookie('user');
        $u_id = Db("user")->where("u_name",$u_name['u_name'])->value("u_id");
        $arr = Db("buycar")->where('u_id',$u_id)->select();
        return view('buycarlist',['arr'=>$arr]);
    }



    //确认票订单(门票)
    public function piao()
    {

    	return view('piao');
    }

    public function num()
    {
        $data = input("post.");
        // print_r($data);die;
        $t_time = strtotime($data['reserve_time']);

        $t_id = $data['t_id'];
        $t_sum = $data['num'];
        $arr = Db("ticket")->where("t_id",$t_id)->find();
        // print_r($t_time);
        // print_r($arr);
        if($t_time > $arr['t_end_time']){
            $res['available'] = 2;
        }else if($t_time < $arr['t__start_time']){
            $res['available'] = 3;
        }else if($t_sum > $data['num']){
            $res['available'] = 4;
        }else{
            $res['available'] = 1;
        }
        // print_r($res);

        return json($res);


    }


    /**
     * 生成订单
     * @access public
     */
    public function order()
    {
        $data = request()->param();
        // print_r($data);die;
        $u_name = cookie('user');
        $data['u_id'] = Db("user")->where("u_name",$u_name['u_name'])->value("u_id");
        $data['t_code'] = $this->Get_Order_no();
        $data['reserve_time'] = strtotime($data['reserve_time']);
        $data['o_price'] = $data['o_price'] * $data['num'];
        $data['buy_time'] = time();
        $data['order'] = date('Ymd').str_pad(rand(1000, 99999), 5, '0', STR_PAD_LEFT);
        unset($data['scenic_code']);
        $arr = Db("ticket_order")->insert($data);
        if($arr){
            return $this->success("正在生成订单",url('ticket/dindan'));
        }
    }



    /**
     * 生成订单号
     * @access public
     * @return  string 订单号
     */
    public function Get_Order_no()
    {
        return base64_encode(rand(1000,9999).md5(time()));
    }





    //生成订单详情页面(门票)
    public function dindan()
    {
        $u_name = cookie('user');
        $u_id = Db("user")->where("u_name",$u_name['u_name'])->value("u_id");
        $price = Db("ticket_order")->where("u_id = $u_id and is_pay = 1")->sum('o_price');
        $arr = Db("ticket_order")->alias('o')->join("ticket t","o.t_id = t.t_id")->where("u_id = $u_id and is_pay = 1")->select();
        return view('dindan',['arr'=>$arr,'price'=>$price]);
    }
    //支付页面(门票)
    public  function zhifu()
    {
        $u_name = cookie('user');
        $u_id = Db("user")->where("u_name",$u_name['u_name'])->value("u_id");
        $price = Db("ticket_order")->where("u_id = $u_id and is_pay = 1")->sum('o_price');
        $arr = Db("ticket_order")->alias('o')->join("ticket t","o.t_id = t.t_id")->where("u_id = $u_id and is_pay = 1")->select();
        $redis = new Redis();
        $redis->set('ticket_order',$arr);
    	return view('zhifu',['arr'=>$arr,'price'=>$price]);
    }
    //支付宝支付
    public function alipay()
    {
        $redis = new Redis();
        $u_name = cookie('user');
        $u_id = Db("user")->where("u_name",$u_name['u_name'])->value("u_id");
        $arr = $redis->get('ticket_order');
        $sum = 0;
        $count = count($arr);
        for ($i = 0; $i < $count; $i++) {
            $sum .= $arr[$i]['order'];
        }
        $data['o_order'] = substr($sum,1);
        $res = Db("ticket_order")->where("u_id = $u_id and is_pay = 1")->update($data);
        return view("alipay",['sum'=>$sum]);
    }
     //酒店
    public function jiudian()
    {
       return view('jiudian');
    }
    //点单
    public function diandian()
    {
        //写个json返回状态码
    	return view('diandian');
    }
    public function din()
    {
    	return view('din');
    }
}