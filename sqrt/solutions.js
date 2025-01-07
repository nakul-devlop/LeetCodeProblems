/**
 * @param {number} x
 * @return {number}
 */
var mySqrt = function(x) {
    if(x === 0 || x === 1){
        return x;
    }
    for (let i = 1; i<=x; i++) {
        var ans = i*i;
        if(ans === x) {
            return i;
        } else if(ans > x) {
            return i-1;
        }
    }
};