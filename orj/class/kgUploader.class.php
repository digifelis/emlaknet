<?PHP

class kg_uploader {

    var $files = array();
    var $error = NULL;
    var $file_names = array();
    var $directory = NULL;
    var $uploaded = false;
    var $uploaded_files = array();
    var $file_new_name = NULL;
    var $results = NULL;

    // dizin kontrolleri
    function directory($directory) {
        // dizin var mi?
        if (!is_dir($directory)) {
            $this -> error .= '<li><strong>'.$directory.'</strong> isminde bir dizin bulunamady!</li>';
        }
        // dizinin yazma izni var mi?
        if (is_dir($path) && !is_writable($directory)) {
            $this -> error .= '<li><strong>'.$directory.'</strong> isimli dizine yazma izni bulunmamaktadyr!</li>';
        }
        $this -> directory = $directory;
    }

    // dosya bilgileri
    function files($files) {
        if ($files) {
            for ($i = 0; $i < count($files); $i++) {
                if ($files['name'][$i]) {
                    $this -> files['tmp_name'][] = $files['tmp_name'][$i];
                    $this -> files['name'][] = $files['name'][$i];
                    $this -> files['type'][] = $files['type'][$i];
                    $this -> files['size'][] = $files['size'][$i];
                }
            }
        }
    }

    // kötü karakterleri de?i?tir.
    function bad_character_rewrite($text){

     $first = array("\\", "/", ":", ";", "~", "|", "(", ")", "\"", "#", "*", "$", "@", "%", "[", "]", "{", "}", "<", ">", "`", "'", ",", " ", "ð", "Ð", "ü", "Ü", "þ", "Þ", "ý", "Ý", "ö", "Ö", "ç", "Ç");
            $last = array("_", "_", "_", "_", "_", "_", "", "_", "_", "_", "_", "_", "_", "_", "_", "_", "_", "_", "_", "_", "_", "", "_", "_", "g", "G", "u", "U", "s", "S", "i", "I", "o", "O", "c", "C");
            $text_rewrite = str_replace($first, $last, $text);
            return $text_rewrite;		
			
    }

    // dosya uzantysy bul
    function file_extension($file_name) {
        $file_extension = strtolower(substr(strrchr($file_name, '.'), 1));
        return $file_extension;
    }

    // ayni isimdeki dosya kontrolu
    function file_name_control($file_name) {
        $file_name = $this -> bad_character_rewrite($file_name);
        if (!file_exists($this -> directory.'/'.$file_name)) {
            return $file_name;
        }else{
            return rand(000000001,999999999).'_'.rand(000000001,999999999).'_'.$file_name;
        }
    }

    // dosya(lari) yukle
    function upload($mime_types) {
        if(!$this -> error) {
            for ($i = 0; $i < count($this -> files['tmp_name']); $i++) {
                if (in_array($this -> files['type'][$i], $mime_types)) {
                    $this -> file_new_name = $this -> file_name_control($this -> files['name'][$i]);
                    move_uploaded_file($this -> files['tmp_name'][$i], $this -> directory.'/'.$this -> file_new_name);
                    $this -> uploaded_files[] = $this -> file_new_name;
                    $this -> results .= '<li><strong>'.$this -> files['name'][$i].'</strong> isimli dosya, <strong>'.$this -> file_new_name.'</strong> ismiyle yüklendi<br />(~'.round($this -> files['size'][$i] / 1024, 2).' kb). Dosya Tipi : '.$this -> file_extension($this -> files['name'][$i]).'</li>';
                }else{
                    echo $this -> files['type'][$i];
                    $this -> results .= '<li>'.$this -> files['name'][$i].' isimli dosya, uyumsuz dosya tipi nedeniyle yüklenmedi!</li>';
                }
            }
            $this -> uploaded = true;
        }
    }

    // upload result reports
    function result_report() {
        if(isset($this -> error)) {
            echo '<ul>';
            echo $this -> error;
            echo '</ul>';
        }
        if ($this -> uploaded == true) {
            echo '<ul>';
            echo $this -> results;
            echo '</ul>';
        }
    }

    function uploader_set($files, $directory, $mime_types) {
        $this -> directory($directory);
        $this -> files($files);
        $this -> upload($mime_types);
    }
}
?>