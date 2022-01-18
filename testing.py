from selenium import webdriver
from selenium.webdriver.common.keys import Keys
from webdriver_manager.chrome import ChromeDriverManager
import time

driver = webdriver.Chrome(ChromeDriverManager().install())

driver.get("http://localhost/music/seleniumTesting.html")

inp = driver.find_element_by_xpath('//*[@id="inputt"]')
submit = driver.find_element_by_xpath('//*[@id="btnn"]')

inp.send_keys('5')

submit.click()

time.sleep(5)

print('Event Name: ',driver.find_element_by_xpath('//*[@id="eventName"]').text)
print('place name : ',driver.find_element_by_xpath('//*[@id="place"]').text)

x=input('')