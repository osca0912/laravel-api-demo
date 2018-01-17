<?php  

namespace App\Api\Controllers;  

use App\Http\Controllers\Controller;  
use Dingo\Api\Routing\Helpers;  


class BaseController extends Controller  
{  
    use Helpers;  

    /**** 
     * BaseController constructor. 
     */  
    public function __construct()  
    {  

    }

    /**
     * 统一跳转方法 错误的返回
     *
     * $status_codes   错误代码 默认 0 表示正确
     * $error_handling  错误原因描述
     * 
     * @return Http response
     */
    public function jsonReturnFalse($status_codes=1, $error_handling='') {

        return response()->json(['status_codes' => $status_codes, 'error_handling' => $error_handling, "results" => []]); 
    }

    /**
     * 统一跳转方法 正确的返回
     *
     * $results    结果集 []类型
     * $error_handling   正确返回的描述
     * 
     * @return Http response
     */
    public function jsonReturnTrue($results=[], $error_handling="") {

    	return response()->json(['status_codes' => 0, 'error_handling' => $error_handling, "results" => $results]);
    }  
}  