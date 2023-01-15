function findIndex($arr=[], $item){
    $index = 0;
    for ($i=0; $i < count($arr); $i++) { 
        if ($arr[$i] === $item) {
            $index = $i;
        }
    }
    return $index !== 0 ? $index : -1;
}
