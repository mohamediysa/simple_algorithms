function findIndexes($arr=[], $item){
    $indexs = [];
    for ($i=0; $i < count($arr); $i++) { 
        if ($arr[$i] === $item) {
            $indexs[] = $i;
        }
    }
    return $indexs != null ? $indexs : -1;
}
