from selenium import webdriver
from selenium.webdriver.common.keys import Keys
from webdriver_manager.chrome import ChromeDriverManager
import time

driver = webdriver.Chrome(ChromeDriverManager().install())

driver.get("http://localhost/hire/sele_frontend.html")

inp = driver.find_element_by_id('inpt')
submit = driver.find_element_by_id('b1')

inp.send_keys('2')

submit.click()

time.sleep(5)

print(driver.find_element_by_id('office').text)
print(driver.find_element_by_id('location').text)

x=input('')
