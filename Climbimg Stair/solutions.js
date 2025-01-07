/**
 * @param {number} n
 * @return {number}
 */

function calc(a, memo = {}) {
    if (a <= 0) {
        return 0;
    }

    if (a === 1) {
        return 1;
    }

    if (memo[a] !== undefined) {
        return memo[a];
    }

    memo[a] = calc(a - 2, memo) + calc(a - 1, memo);
    return memo[a];
}

var climbStairs = function (n) {
    n++;
    var ans = calc(n);
    return ans;
};