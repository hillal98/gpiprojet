from maxpar import *
x = Value('d', 0)
y = Value('d', 2)
z = Value('d', 3)
def ft1():
    global x
    time.sleep(1)
    x.value = 10
    print("x" , x.value)
def ft2():
    global y
    time.sleep(1)
    y.value = 25
    print("y" , y.value)
def ft3():
    global x, y, z
    time.sleep(1)
    z.value = x.value + y.value + 1
    print(z.value)
def ft4():
    time.sleep(1)
    print('iam t4')

t1 = Task('t1', [], [], ft1)
t2 = Task('t2', [], [], ft2)
t3 = Task('tsomme', [], [], ft3)
t4 = Task('trandom', [], [], ft4)
s = TaskSystem([t1, t2, t3, t4], {"t1":[], "t2":["t1"], "tsomme":["t1", "t2"], "trandom":[]})
s.run()
# time.sleep(2)
print(z.value)