<?php 

class Database
{
    private array $database = [];
    private string $database_name;

    public function __construct(string $database_name) {
        $this->database_name = $database_name;
        if (file_exists("$database_name.json")) {
            $this->database = json_decode(
                file_get_contents("$database_name.json"),
                true
            );
        }
    }

    public function put($data) {
        $this->database[uniqid()] = $data;
        $this->save($this->database);
    }

    public function get($id) {
        $data = $this->database[$id];

        if($data){
            $data['id'] = $id;
            return $data;
        }
        return null; 
    }

    
    private function save($data) {
        return file_put_contents(
            "$this->database_name.json",
            json_encode($data)
            );
    }
}


$db = new Database('students'); 









