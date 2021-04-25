func strStr(haystack string, needle string) int {
    if(needle ==""){
        return 0;
    }
    
    strlen := len(needle);
    temp :="";
    for i:=0; i<len(haystack)-strlen+1; i++ {
        temp=haystack[i: i+strlen]
        if(temp==needle){
            return i;
        }
    }
    return -1;
}
