const testfunc = (str_num) => {
    try {
        Number(str_num)
    } 
    catch {
        return "Error!"
    }
    let base_num = Number(str_num)
    let sum_num = 1/2*base_num*(base_num+1)
    if ( sum_num <= 0) {
        return "Error!"
    } else {
        return toString(sum_num)
    }
}