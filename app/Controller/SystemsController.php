<?php
    App::uses('AppController', 'Controller');
    /**
    * Bills Controller
    *
    * @property Bill $Bill
    * @property PaginatorComponent $Paginator
    */
    class SystemsController extends AppController {

        /**
        * Components
        *
        * @var array
        */
        var  $helpers = array('Session');
        var  $components = array('Session');
        public $theme = 'Cakestrap';




        public function backup() {
            if ($this->Session->check('userSS') && $this->Session->check('passSS')) {
            $db = $this->System->getDataSource()->config;
            //            $outputfilename = backup_tables($db['host'],$db['login'],$db['password'],$db['database']);
            //            
            $outputfilename = $db['database'] . time(). '.sql';
            //        $outputfilename = str_replace(" ", "-", $outputfilename);

            //Dump the MySQL database
            if(strlen($db['mysqlpath']) >0 ){
                $db['mysqlpath'] = $db['mysqlpath'].'\\'; 
            }
            $command = $db['mysqlpath'].'mysqldump -u'. $db['login'] .' -p'. $db['password'] .' '. $db['database'] .' > '. $outputfilename;    
            exec($command);
            header('Content-Description: File Transfer');
            header('Content-Type: application/octet-stream');
            header('Content-Disposition: attachment; filename='.basename($outputfilename));
            header('Content-Transfer-Encoding: binary');
            header('Expires: 0');
            header('Cache-Control: must-revalidate');
            header('Pragma: public');
            header('Content-Length: ' . filesize($outputfilename));
            //            ob_clean();
            flush();         
            readfile($outputfilename);

            unlink($outputfilename);
            exit;
        }
        else{
      $this->redirect(array('controller'=>'users','action'=>'login'));
    }
        }

        public function restore(){
           if ($this->Session->check('userSS') && $this->Session->check('passSS')) { 
            if ($this->request->is('post') || $this->request->is('put')) {

                $target_path = getcwd();
                $databasefilename = $this->request->data["Systems"]["data"]['name'];

                move_uploaded_file($this->request->data["Systems"]["data"]["tmp_name"], $target_path . '/' . $databasefilename);
                $file =  $target_path . '/' . $databasefilename;
                $db = $this->System->getDataSource()->config;
                //Restore the database 
                if(strlen($db['mysqlpath']) >0 ){
                    $db['mysqlpath'] = $db['mysqlpath'].'\\'; 
                }
                $command = $db['mysqlpath'].'mysql -u '. $db['login'] .' -p'. $db['password'] .' '. $db['database'] .' < '. $file;           

                exec($command);

                unlink($file); 

                $this->Session->setFlash(__('Khôi phục dữ liệu thành công'), 'flash/success');
                $this->redirect(array('action'=>'index'));  
            }

        }
        else{
      $this->redirect(array('controller'=>'users','action'=>'login'));
    }

    }

    /* backup the db OR just a table */
    function backup_tables($host,$user,$pass,$name,$tables = '*')
    {
if ($this->Session->check('userSS') && $this->Session->check('passSS')) {
        $link = mysql_connect($host,$user,$pass);
        mysql_select_db($name,$link);

        $filename = $name.time().'.sql';
        $handle = fopen($filename,'w');


        //get all of the tables
        if($tables == '*')
        {
            $tables = array();
            $result = mysql_query('SHOW TABLES');
            while($row = mysql_fetch_row($result))
            {
                $tables[] = $row[0];
            }
        }
        else
        {
            $tables = is_array($tables) ? $tables : explode(',',$tables);
        }


        //cycle through
        foreach($tables as $table)
        {
            $return = '';
            $result = mysql_query('SELECT * FROM '.$table);
            $num_fields = mysql_num_fields($result);

            $return.= 'DROP TABLE IF EXISTS `'.$table.'`;';
            $row2 = mysql_fetch_row(mysql_query('SHOW CREATE TABLE '.$table));
            $return.= "\n\n".$row2[1].";\n\n";

            $return.= 'LOCK TABLES `'.$table.'` WRITE;'."\n\n";
            for ($i = 0; $i < $num_fields; $i++) 
            {
                while($row = mysql_fetch_row($result))
                {
                    $return.= 'INSERT INTO '.$table.' VALUES(';
                    for($j=0; $j<$num_fields; $j++) 
                    {
                        $row[$j] = addslashes($row[$j]);
                        $row[$j] = ereg_replace("\n","\\n",$row[$j]);
                        if (isset($row[$j])) { $return.= '"'.$row[$j].'"' ; } else { $return.= '""'; }
                        if ($j<($num_fields-1)) { $return.= ','; }
                    }
                    $return.= ");\n";
                }
            }
            $return.= 'UNLOCK TABLES;';
            $return.="\n\n\n";
            fwrite($handle,$return);
        }
        //save file  
        fclose($handle);
        return $filename;
    }
    else{
      $this->redirect(array('controller'=>'users','action'=>'login'));
    }
}
}

