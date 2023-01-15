function toLower(string $txt=''){
    $newtxt = '';
    for ($i=0; $i < strlen($txt); $i++) { 
        switch ($txt[$i]) {
            case 'A':
                $newtxt .= 'a';
                break;
            case 'B':
                $newtxt .= 'b';
                break;
            case 'C':
                $newtxt .= 'c';
                break;
            case 'D':
                $newtxt .= 'd';
                break;
            case 'E':
                $newtxt .= 'e';
                break;
            case 'F':
                $newtxt .= 'f';
                break;
            case 'G':
                $newtxt .= 'g';
                break;
            case 'H':
                $newtxt .= 'h';
                break;
            case 'I':
                $newtxt .= 'i';
                break;
            case 'J':
                $newtxt .= 'j';
                break;
            case 'K':
                $newtxt .= 'k';
                break;
            case 'L':
                $newtxt .= 'l';
                break;
            case 'M':
                $newtxt .= 'm';
                break;
            case 'N':
                $newtxt .= 'n';
                break;
            case 'O':
                $newtxt .= 'o';
                break;
            case 'P':
                $newtxt .= 'p';
                break;
            case 'Q':
                $newtxt .= 'q';
                break;
            case 'R':
                $newtxt .= 'r';
                break;
            case 'S':
                $newtxt .= 's';
                break;
            case 'T':
                $newtxt .= 't';
                break;
            case 'U':
                $newtxt .= 'u';
                break;
            case 'V':
                $newtxt .= 'v';
                break;
            case 'W':
                $newtxt .= 'w';
                break;
            case 'X':
                $newtxt .= 'x';
                break;
            case 'Y':
                $newtxt .= 'y';
                break;
            case 'Z':
                $newtxt .= 'z';
                break;
            default :
                $newtxt .= $txt[$i];
                break;
        }
    }
    return $newtxt;
}
