<?php

class Logs {
    private static $instance = null;
    private array $logs = [];

    public static function getInstance(){
        if(self::$instance == null){
        self::$instance = new Logs();
        }
        return self::$instance;
    }

    public function escreverLogs(string $texto) {
        $filename = date('Y-m-d_H_s', time()) . '.txt';
        $fileHandler = fopen($filename, "w+");
        fwrite($fileHandler, $texto);
        fclose($fileHandler);
        $this->logs[] = $filename;
    }


    public function exibirLog(){
        foreach ($this->logs as $log) {
            echo $log . '<br>';
            $fileContent = file_get_contents($log);
            echo '<pre>';
            echo $fileContent;
            echo '</pre><br>';
        }
    }
}

$logs = Logs::getInstance();

$logs->escreverLogs("texto do log");
$logs->exibirLog();


?>
