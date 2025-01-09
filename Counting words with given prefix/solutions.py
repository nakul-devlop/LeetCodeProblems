class Solution(object):
    def prefixCount(self, words, pref):
        ans = 0

        for x in words:
            match = x.startswith(pref)
            if(match):
                ans = ans + 1

        return ans
        