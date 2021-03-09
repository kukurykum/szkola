import re
from bs4 import BeautifulSoup
import requests


# juz dziala tez na liczby ujemne
def format(string):
    return int(re.sub(r'[^-\d]', '', string))


class Weather:
    def __init__(self, temperature, pressure, wind):
        self.temperature = temperature
        self.pressure = pressure
        self.wind = wind

    def __str__(self):
      return f"Temperature: {self.temperature} °C \n" \
             f"Pressure: {self.pressure} hPa \n" \
             f"Wind: {self.wind} km/h"

    def averages(*args):
        tempAvg, pressureAvg, windAvg = 0, 0, 0
        for x in args:
            tempAvg += x.temperature
            pressureAvg += x.pressure
            windAvg += x.wind
        tempAvg = round(tempAvg/len(args), 1)
        pressureAvg = round(pressureAvg/len(args), 1)
        windAvg = round(windAvg/len(args), 1)
        return Weather(tempAvg, pressureAvg, windAvg)

# wp
page = requests.get("https://pogoda.wp.pl/pogoda-na-dzis/szczecin/3083829").text
soup = BeautifulSoup(page, 'lxml')

tempVal = soup.find('span', class_="temp").text

pressure = soup.find_all('td', class_="detail")[1]
pressureVal = pressure.div.span.text

wind = soup.find_all('td', class_="detail")[2]
windVal = wind.div.span.text

wp = Weather(
    format(tempVal),
    format(pressureVal),
    format(windVal)
)

# onet
page = requests.get("https://pogoda.onet.pl/prognoza-pogody/szczecin-351892").text
soup = BeautifulSoup(page, "lxml")

tempVal = soup.find('div', class_="temp").text

pressureVal = soup.find_all('span', class_="restParamValue")[2].text

windVal = soup.find_all('span', class_="restParamValue")[1].text

onet = Weather(
    format(tempVal),
    format(pressureVal),
    format(windVal)
)

# freemeteo
page = requests.get(
    "https://freemeteo.pl/pogoda/szczecin/aktualna-pogoda/lokalizacja/?gid=3083829&language=polish&country=poland").text
soup = BeautifulSoup(page, "lxml")

tempVal = soup.find('div', class_="temp").text

pressure = soup.find('div', class_="stats").text
pressureVal = pressure.split(':')[3]
pressureVal = pressureVal.split(',')[0]

windVal = soup.find('div', class_="wind").b.text

freemeteo = Weather(
    format(tempVal),
    format(pressureVal),
    format(windVal)
)

avg = Weather.averages(wp, onet, freemeteo)

print(avg)
