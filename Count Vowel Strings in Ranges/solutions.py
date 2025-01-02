class Solution:
    def vowelStrings(self, words, queries):
        vowels = {'a', 'e', 'i', 'o', 'u'}
        
        n = len(words)
        prefix = [0] * (n + 1) 
        
        for i in range(n):
            if words[i][0] in vowels and words[i][-1] in vowels:
                prefix[i + 1] = prefix[i] + 1
            else:
                prefix[i + 1] = prefix[i]
        
        result = []
        for query in queries:
            li, ri = query
            result.append(prefix[ri + 1] - prefix[li])
        
        return result
