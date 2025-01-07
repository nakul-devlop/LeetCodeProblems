/**
 * @param {string} s
 * @return {number}
 */
var lengthOfLastWord = function(s) {
    var parts = s.split(" ");

    var a = parts.length;

    for(let i = a-1; i>=0; i--) {
        var lastWord = parts[i]; 
        var NoOfWord = lastWord.length;
        if (NoOfWord !== 0) {
            return NoOfWord;
        }
    }
};