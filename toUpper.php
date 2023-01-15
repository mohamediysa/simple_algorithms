function toUpper(string $txt=''){
    $newtxt = '';
    for ($i=0; $i < strlen($txt); $i++) { 
        switch ($txt[$i]) {
            case 'a':
                $newtxt .= 'A';
                break;
            case 'b':
                $newtxt .= 'B';
                break;
            case 'c':
                $newtxt .= 'C';
                break;
            case 'd':
                $newtxt .= 'D';
                break;
            case 'e':
                $newtxt .= 'E';
                break;
            case 'f':
                $newtxt .= 'F';
                break;
            case 'g':
                $newtxt .= 'G';
                break;
            case 'h':
                $newtxt .= 'H';
                break;
            case 'i':
                $newtxt .= 'I';
                break;
            case 'j':
                $newtxt .= 'J';
                break;
            case 'k':
                $newtxt .= 'K';
                break;
            case 'l':
                $newtxt .= 'L';
                break;
            case 'm':
                $newtxt .= 'M';
                break;
            case 'n':
                $newtxt .= 'N';
                break;
            case 'o':
                $newtxt .= 'O';
                break;
            case 'p':
                $newtxt .= 'P';
                break;
            case 'q':
                $newtxt .= 'Q';
                break;
            case 'r':
                $newtxt .= 'R';
                break;
            case 's':
                $newtxt .= 'S';
                break;
            case 't':
                $newtxt .= 'T';
                break;
            case 'u':
                $newtxt .= 'U';
                break;
            case 'v':
                $newtxt .= 'V';
                break;
            case 'w':
                $newtxt .= 'W';
                break;
            case 'x':
                $newtxt .= 'X';
                break;
            case 'y':
                $newtxt .= 'Y';
                break;
            case 'z':
                $newtxt .= 'Z';
                break;
            default :
                $newtxt .= $txt[$i];
                break;
        }
    }
    return $newtxt;
}
