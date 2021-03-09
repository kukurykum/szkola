blocks = int(input("enter the number of blocks: "))
x = 1
height = 0

while x <= blocks:
    blocks -= x
    x += 1
    height += 1

print("The height of the pyramid:", height)