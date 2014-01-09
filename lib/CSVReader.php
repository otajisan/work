<?php

class CSVReader{

    /**
     * CSVファイルを読み込む
     */
    public function read($csv){

        // CSVを読み込む
        $data = file_get_contents($csv);

        // 一時ファイルに書き込み
        $tmp  = tmpfile();
        $csv  = array();
 
        fwrite($tmp, $data);
        rewind($tmp);

        // CSVを読み込む
        while (($data = fgetcsv($tmp, 0, ',')) !== FALSE) {
            $csv[] = $data;
        }

        fclose($tmp);
 
        return $csv;
    }

}
