<?php
	function getAllComments($restaurantId) {
    global $db;
		$stmt = $db->prepare('SELECT * FROM comment where restaurantId= ?');
		$stmt->execute(array($restaurantId));
		return $stmt->fetchAll();
	}

  function addComment($restaurantId, $userId, $content, $evaluation){
    global $db;
   
    $stmt = $db->prepare('INSERT INTO comment Values(Null, ?, ?, ?, ?)');
    $stmt->execute(array($restaurantId, $userId, $content, $evaluation));
    echo('add comment complete');
   
  }

  function deleteComment($id, $userId){
    global $db;
    //$stmt = $db->prepare('DELETE FROM comment where id = ? And userId = ?');
     $stmt = $db->prepare('DELETE FROM comment where id = ?');
    $stmt->execute(array($id));
  }
?>
