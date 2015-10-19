<?php 
namespace App\Models;


use DB;

class Game{

	public $id;
	public $name;
	public $year;

	public function save() {
        if (empty($this->id)) {
            $this->insert();
        } else {
            $this->update();
        }
    }

    private function insert(){
    	$sql='INSERT into Game(name, year)values (:name, :year)';
    	DB::insert($sql, [':name'=>$this->name, ':year'=>$this->year]);
    }

    private function update(){
    	$sql = "UPDATE Game set name = :name, year = :year where id = :id";
		DB::update($sql, [":name"=>$this->name, ":year"=>$this->year, ":id"=>$this->id ]);
    }

    public static function delete($id){
    	$sql="DELETE from Game where id = :id";
    	DB::delete($sql, [":id" => $id]);
    }

    public static function get($id){
    	$sql = "SELECT * from Game where id = :id";

    	$row = DB::selectOne($sql, ["id"=>$id]);

    	$game = new Game();
		$game->id = $row["id"];
		$game->name = $row["name"];
		$game->year = $row["year"];
		return $game;

    }

    public static function getAll(){
    	$sql = "SELECT * from Game";
    	$rows = DB::select($sql);

    	$games = [];

    	foreach($rows as $row){
    		$game = new Game();
    		$game->id = $row["id"];
    		$game->name = $row["name"];
    		$game->year = $row["year"];
    		$games[] = $game;
    	}
    	return $games;
    }


}
