def func_factorial(factorial):
   if factorial==0 or factorial==1:
            factorial=1
   elif factorial>1:
            factorial=factorial*func_factorial(factorial-1)
   return factorial

