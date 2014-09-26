<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Js_test extends CI_Controller {

    public function __construct()
    {
        parent::__construct();
        $this->load->library(array('parser','session'));
        $this->load->helper(array('form', 'url'));
    }

    /**
     * @author Charlie Liu <liuchangli0107@gmail.com>
     */
    public function index()
    {

        $content[] = array(
            'content_value' => 'abgne_tab',
            'content_title' => '利用 jQuery 來製作網頁頁籤(Tab)',
            'content_url' => 'js_test/abgne_tab'
        ) ;
        $content[] = array(
            'content_value' => 'JS_object_test',
            'content_title' => 'JS object 測試',
            'content_url' => 'js_test/js_object_test'
        ) ;
        $content[] = array(
            'content_value' => 'JS_object_test2',
            'content_title' => 'JS object 測試2',
            'content_url' => 'js_test/js_object_test2'
        ) ;
        $content[] = array(
            'content_value' => 'JS_file_upload',
            'content_title' => 'jQuery file_upload 套件 測試',
            'content_url' => 'js_test/file_upload'
        ) ;
        $content[] = array(
            'content_value' => 'get_filesize',
            'content_title' => '檔案大小',
            'content_url' => 'js_test/get_filesize'
        ) ;

        // 標題 內容顯示
        $data = array(
            'title' => 'JS 測試',
            'current_page' => strtolower(__CLASS__), // 當下類別
            'current_fun' => strtolower(__FUNCTION__), // 當下function
            'content' => $content,
        );

        // Template parser class
        // 中間挖掉的部分
        $content_div = $this->parser->parse('welcome_view', $data, true);
        // 中間部分塞入外框
        $html_date = $data ;
        $html_date['content_div'] = $content_div ;
        $this->parser->parse('index_view', $html_date ) ;
    }

    public function abgne_tab()
    {
        // 顯示資料
        $content = array();
        $nav[] = array(
            'content_id' => 'tab_1',
            'content_title' => '青花瓷',
        ) ;
        $content[] = array(
            'content_id' => 'tab_1',
            'content_title' => '青花瓷',
            'content_value' => '
            作詞：方文山<br>
            作曲：周杰倫<br>
            編曲：鍾興民<br>
            <br>
            素胚勾勒出青花筆鋒濃轉淡<br>
            瓶身描繪的牡丹一如妳初妝<br>
            冉冉檀香透過窗心事我了然<br>
            宣紙上走筆至此擱一半<br>
            <br>
            釉色渲染仕女圖韻味被私藏<br>
            而妳嫣然的一笑如含苞待放<br>
            妳的美一縷飄散 去到我去不了的地方<br>
            <br>
            天青色等煙雨 而我在等妳<br>
            炊煙裊裊昇起 隔江千萬里<br>
            在瓶底書漢隸仿前朝的飄逸<br>
            就當我為遇見妳伏筆<br>
            <br>
            天青色等煙雨 而我在等妳<br>
            月色被打撈起 暈開了結局<br>
            如傳世的青花瓷自顧自美麗 妳眼帶笑意<br>
            <br>
            色白花青的錦鯉躍然於碗底<br>
            臨摹宋體落款時卻惦記著妳<br>
            妳隱藏在窯燒裡千年的秘密<br>
            極細膩猶如繡花針落地<br>
            <br>
            簾外芭蕉惹驟雨門環惹銅綠<br>
            而我路過那江南小鎮惹了妳<br>
            在潑墨山水畫裡 妳從墨色深處被隱去<br>
            <br>
            天青色等煙雨 而我在等妳<br>
            炊煙裊裊昇起 隔江千萬里<br>
            在瓶底書漢隸仿前朝的飄逸<br>
            就當我為遇見妳伏筆<br>
            <br>
            天青色等煙雨 而我在等妳<br>
            月色被打撈起 暈開了結局<br>
            如傳世的青花瓷自顧自美麗 妳眼帶笑意<br>
            <br>
            天青色等煙雨 而我在等妳<br>
            炊煙裊裊昇起 隔江千萬里<br>
            在瓶底書漢隸仿前朝的飄逸<br>
            就當我為遇見妳伏筆<br>
            <br>
            天青色等煙雨 而我在等妳<br>
            月色被打撈起 暈開了結局<br>
            如傳世的青花瓷自顧自美麗 妳眼帶笑意<br>
            <br>
            更多更詳盡歌詞 在 <b>※ Mojim.com　魔鏡歌詞網</b><br>
            ',
        ) ;

        $nav[] = array(
            'content_id' => 'tab_2',
            'content_title' => '髮如雪',
        ) ;
        $content[] = array(
            'content_id' => 'tab_2',
            'content_title' => '髮如雪',
            'content_value' => '
            作詞：方文山<br>
            作曲：周杰倫<br>
            <br>
            狼牙月 伊人憔悴<br>
            我舉杯 飲盡了風雪<br>
            是誰打翻前世櫃 惹塵埃是非<br>
            緣字訣 幾番輪迴<br>
            妳鎖眉 哭紅顏喚不回<br>
            縱然青史已經成灰 我愛不滅<br>
            繁華如三千東流水 我只取一瓢愛了解<br>
            只戀妳化身的蝶<br>
            <br>
            妳髮如雪 淒美了離別<br>
            我焚香感動了誰<br>
            邀明月 讓回憶皎潔<br>
            愛在月光下完美<br>
            妳髮如雪 紛飛了眼淚<br>
            我等待蒼老了誰<br>
            紅塵醉 微醺的歲月<br>
            我用無悔 刻永世愛妳的碑<br>
            <br>
            Rap:<br>
            你髮如雪 淒美了離別<br>
            我焚香感動了誰<br>
            邀明月 讓回憶皎潔<br>
            愛在月光下完美<br>
            你髮如雪 紛飛了眼淚<br>
            我等待蒼老了誰<br>
            紅塵醉 微醺的歲月<br>
            <br>
            啦兒啦 啦兒啦 啦兒啦兒啦<br>
            啦兒啦 啦兒啦 啦兒啦兒啦<br>
            銅鏡映無邪 紮馬尾<br>
            妳若撒野 今生我把酒奉陪<br>
            <br>
            更多更詳盡歌詞 在 <b>※ Mojim.com　魔鏡歌詞網</b><br>
            ',
        ) ;

        $nav[] = array(
            'content_id' => 'tab_3',
            'content_title' => '菊花台',
        ) ;
        $content[] = array(
            'content_id' => 'tab_3',
            'content_title' => '菊花台',
            'content_value' => '
            作詞：方文山<br>
            作曲：周杰倫<br>
            編曲：鍾興民<br>
            <br>
            你的淚光　柔弱中帶傷　慘白的月彎彎勾住過往<br>
            夜太漫長　凝結成了霜　是誰在閣樓上冰冷的絕望<br>
            雨輕輕彈　朱紅色的窗　我一生在紙上被風吹亂<br>
            夢在遠方　化成一縷香　隨風飄散你的模樣<br>
            <br>
            菊花殘滿地傷　你的笑容已泛黃　花落人斷腸　我心事靜靜躺<br>
            北風亂夜未央　你的影子剪不斷　徒留我孤單　在湖面成雙<br>
            <br>
            花已向晚　飄落了燦爛　凋謝的世道上命運不堪<br>
            <br>
            愁莫渡江　秋心拆兩半　怕你上不了岸一輩子搖晃<br>
            誰的江山　馬蹄聲狂亂　我一身的戎裝呼嘯滄桑<br>
            天微微亮　你輕聲的嘆　一夜惆悵如此委婉<br>
            <br>
            菊花殘滿地傷　你的笑容已泛黃　花落人斷腸　我心事靜靜躺<br>
            北風亂夜未央　你的影子剪不斷　徒留我孤單　在湖面成雙<br>
            <br>
            菊花殘滿地傷　你的笑容已泛黃　花落人斷腸　我心事靜靜躺<br>
            北風亂夜未央　你的影子剪不斷　徒留我孤單　在湖面成雙<br>
            <br>
            更多更詳盡歌詞 在 <b>※ Mojim.com　魔鏡歌詞網</b><br>
            ',
        ) ;

        // 標題 內容顯示
        $data = array(
            'title'         => '利用 jQuery 來製作網頁頁籤(Tab)',
            'current_page'  => strtolower(__CLASS__), // 當下類別
            'current_fun'   => strtolower(__FUNCTION__), // 當下function
            'nav'           => $nav,
            'content'       => $content,
        );

        // Template parser class
        // 中間挖掉的部分
        $content_div = $this->parser->parse('abgne_tab_view', $data, true);
        // 中間部分塞入外框
        $html_date = $data ;
        $html_date['content_div'] = $content_div ;
        $this->parser->parse('index_view', $html_date ) ;
    }

    public function js_object_test()
    {

        // 標題 內容顯示
        $data = array(
            'title' => 'JS Object 測試',
            'current_page' => strtolower(__CLASS__), // 當下類別
            'current_fun' => strtolower(__FUNCTION__), // 當下function
            'content' => '',
        );

        // Template parser class
        // 中間挖掉的部分
        $content_div = $this->parser->parse('js_object_test_view', $data, true);
        // 中間部分塞入外框
        $html_date = $data ;
        $html_date['content_div'] = $content_div ;
        $this->parser->parse('index_view', $html_date ) ;
    }

    public function js_object_test2()
    {

        // 標題 內容顯示
        $data = array(
            'title' => 'JS Object 測試2',
            'current_page' => strtolower(__CLASS__), // 當下類別
            'current_fun' => strtolower(__FUNCTION__), // 當下function
            'content' => '',
        );

        // Template parser class
        // 中間挖掉的部分
        $content_div = $this->parser->parse('js_object_test2_view', $data, true);
        // 中間部分塞入外框
        $html_date = $data ;
        $html_date['content_div'] = $content_div ;
        $this->parser->parse('index_view', $html_date ) ;
    }

    public function file_upload()
    {
        // 標題 內容顯示
        $data = array(
            'title' => 'JS file upload 測試',
            'current_page' => strtolower(__CLASS__), // 當下類別
            'current_fun' => strtolower(__FUNCTION__), // 當下function
            'content' => '',
            '_FILES'=>$_FILES,
            'base_url'=>base_url(),
        );

        // 中間挖掉的部分
        $content_div = $this->load->view('file_upload_view', $data, true);
        // 中間部分塞入外框
        $html_date = $data ;
        $html_date['content_div'] = $content_div ;

        $html_date['css'] = array() ;
        //$html_date['css'][] = 'js/jQuery-File-Upload-9.7.2/css/style.css';
        $html_date['css'][] = 'js/jQuery-File-Upload-9.7.2/css/jquery.fileupload.css';
        $html_date['css'][] = 'js/jQuery-File-Upload-9.7.2/css/jquery.fileupload-ui.css';
        $html_date['css'][] = 'http://blueimp.github.io/Gallery/css/blueimp-gallery.min.css';

        $html_date['css_ie'] = array() ;
        $html_date['css_ie'][] = 'jQuery-File-Upload-9.7.2/css/demo-ie8.css';

        $html_date['js'] = array() ;
        $html_date['js'][] = 'js/jQuery-File-Upload-9.7.2/js/vendor/jquery.ui.widget.js';
        $html_date['js'][] = 'http://blueimp.github.io/JavaScript-Templates/js/tmpl.min.js';
        $html_date['js'][] = 'http://blueimp.github.io/JavaScript-Load-Image/js/load-image.all.min.js';
        $html_date['js'][] = 'http://blueimp.github.io/JavaScript-Canvas-to-Blob/js/canvas-to-blob.min.js';
        $html_date['js'][] = 'http://blueimp.github.io/Gallery/js/jquery.blueimp-gallery.min.js';
        $html_date['js'][] = 'js/jQuery-File-Upload-9.7.2/js/jquery.fileupload.js';
        $html_date['js'][] = 'js/jQuery-File-Upload-9.7.2/js/jquery.fileupload-process.js';
        $html_date['js'][] = 'js/jQuery-File-Upload-9.7.2/js/jquery.fileupload-image.js';
        $html_date['js'][] = 'js/jQuery-File-Upload-9.7.2/js/jquery.fileupload-audio.js';
        $html_date['js'][] = 'js/jQuery-File-Upload-9.7.2/js/jquery.fileupload-video.js';
        $html_date['js'][] = 'js/jQuery-File-Upload-9.7.2/js/jquery.fileupload-validate.js';
        $html_date['js'][] = 'js/jQuery-File-Upload-9.7.2/js/jquery.fileupload-ui.js';
        $html_date['js'][] = 'js/jQuery-File-Upload-9.7.2/js/main_charlie.js';

        $html_date['js_ie'] = array() ;
        $html_date['js_ie'][] = 'js/jQuery-File-Upload-9.7.2/js/cors/jquery.xdr-transport.js';

        $this->parser->parse('index_view', $html_date ) ;
    }

    public function demo()
    {
        $this->parser->parse('file_upload_2_view', array() ) ;
    }

    public function do_upload()
    {
        /*
        $this->load->library('session');
        $this->session->set_userdata('do_upload', json_encode($_FILES));
        */

        $upload_path_url = base_url() . 'uploads/';

        $config['upload_path'] = './uploads/';
        $config['allowed_types'] = '*';
        $config['encrypt_name'] = TRUE;
        $config['max_size'] = 0;

        $this->load->library('upload', $config);

        $files = array();
        /*
        foreach ( $_FILES as $k=>$v ) {

            unset($this->upload->error_msg);

            if ( ! $this->upload->do_upload($k))
            {
                $error = $this->upload->display_errors();
                $error = str_replace("<p>","", $error);
                $error = str_replace("</p>","", $error);
                $info->error = $error;
                $files[] = $info;
            }
            else
            {
                $data = $this->upload->data();

                $thumbnailUrl = '' ;
                if( !empty($data['is_image']) )
                {
                    // to re-size for thumbnail images un-comment and set path here and in json array
                    $config = array();
                    $config['image_library'] = 'gd2';
                    $config['source_image'] = $data['full_path'];
                    $config['create_thumb'] = TRUE;
                    $config['new_image'] = $data['file_path'] . 'thumbs/';
                    $config['maintain_ratio'] = TRUE;
                    $config['thumb_marker'] = '';
                    $config['width'] = 75;
                    $config['height'] = 50;
                    $this->load->library('image_lib', $config);
                    $this->image_lib->resize();
                    $thumbnailUrl = $upload_path_url . 'thumbs/' . $data['file_name'] ;
                }

                //set the data for the json array
                $info->name = $data['file_name'];
                $info->size = $data['file_size'];
                $info->osize = $v['size'];
                $info->type = $data['file_type'];
                $info->url = $upload_path_url . $data['file_name'];
                // I set this to original file since I did not create thumbs.  change to thumbnail directory if you do = $upload_path_url .'/thumbs' .$data['file_name']
                $info->thumbnailUrl = $thumbnailUrl;
                $info->deleteUrl = base_url() . 'file_upload/deleteImage/' . $data['file_name'];
                $info->deleteType = 'DELETE';
                $info->error = null;
                $files[] = $info;
            }
        }
        */
        unset($this->upload->error_msg);

        if ( ! $this->upload->do_upload('files'))
        {
            $error = $this->upload->display_errors();
            $error = str_replace("<p>","", $error);
            $error = str_replace("</p>","", $error);
            $info->error = $error;
            $files[] = $info;
        }
        else
        {
            $data = $this->upload->data();

            $thumbnailUrl = '' ;
            if( !empty($data['is_image']) )
            {
                // to re-size for thumbnail images un-comment and set path here and in json array
                $config = array();
                $config['image_library'] = 'gd2';
                $config['source_image'] = $data['full_path'];
                $config['create_thumb'] = TRUE;
                $config['new_image'] = $data['file_path'] . 'thumbs/';
                $config['maintain_ratio'] = TRUE;
                $config['thumb_marker'] = '';
                $config['width'] = 75;
                $config['height'] = 50;
                $this->load->library('image_lib', $config);
                $this->image_lib->resize();
                $thumbnailUrl = $upload_path_url . 'thumbs/' . $data['file_name'] ;
            }

            //set the data for the json array
            $info->name = $data['file_name'];
            $info->size = $data['file_size'];
            $info->osize = $_FILES['files']['size'];
            $info->type = $data['file_type'];
            $info->url = $upload_path_url . $data['file_name'];
            // I set this to original file since I did not create thumbs.  change to thumbnail directory if you do = $upload_path_url .'/thumbs' .$data['file_name']
            $info->thumbnailUrl = $thumbnailUrl;
            $info->deleteUrl = base_url() . 'file_upload/deleteImage/' . $data['file_name'];
            $info->deleteType = 'DELETE';
            $info->error = null;
            $files[] = $info;
        }

        if(!empty($files))
        {
            echo json_encode(array("files" => $files,'_FILES'=>$_FILES));
        }
    }

    public function deleteImage($file) {//gets the job done but you might want to add error checking and security
        $success = unlink(FCPATH . 'uploads/' . $file);
        if( file_exists(FCPATH . 'uploads/thumbs/' . $file) )
        {
            unlink(FCPATH . 'uploads/thumbs/' . $file);
        }
        //info to see if it is doing what it is supposed to
        $info->sucess = $success;
        $info->path = base_url() . 'uploads/' . $file;
        $info->file = is_file(FCPATH . 'uploads/' . $file);

        echo json_encode(array($info));
    }

    public function get_filesize()
    {
        // 標題 內容顯示
        $data = array(
            'title' => 'JS file upload 測試',
            'current_page' => strtolower(__CLASS__), // 當下類別
            'current_fun' => strtolower(__FUNCTION__), // 當下function
            'content' => '',
            '_FILES'=>$_FILES,
            'base_url'=>base_url(),
        );

        // 中間挖掉的部分
        $content_div = $this->load->view('get_filesize_view', $data, true);
        // 中間部分塞入外框
        $html_date = $data ;
        $html_date['content_div'] = $content_div ;

        $this->parser->parse('index_view', $html_date ) ;
    }
}
?>