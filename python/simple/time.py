hour = int(input("Starting time (hours): "))
mins = int(input("Starting time (minutes): "))
dura = int(input("Event duration (minutes): "))

mins += dura
dura = mins % 60
hour = hour + mins // 60

if hour > 24:
    temp = hour // 24
    hour -= 24 * temp

print(str(hour) + ":" + str(dura))