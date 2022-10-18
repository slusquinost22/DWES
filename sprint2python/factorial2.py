def func_factorial2(factorial):
    if factorial==0 or factorial==1:
        factorial=1
    elif factorial >1:
        for i in range(1, factorial):
            factorial=factorial*i
    return factorial
