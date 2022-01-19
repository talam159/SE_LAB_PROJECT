from selenium import webdriver
from selenium.webdriver.common.keys import Keys
from webdriver_manager.chrome import ChromeDriverManager
import time

driver = webdriver.Chrome(ChromeDriverManager().install())
driver.get("http://localhost/SE_Lab/SE_LAB_PROJECT/index.php")
driver.maximize_window()
time.sleep(1)

link1 = driver.find_element_by_xpath('//*[@id="header"]/div/div/div[2]/ul/div[2]/li/button')
link1.click()
time.sleep(1)

link2 = driver.find_element_by_xpath('//*[@id="myDropdown2"]/a[1]')
link2.click()

inp=driver.find_element_by_name("email")
inp.send_keys("artcell@gmail.com")
inp1=driver.find_element_by_name("password")
inp1.send_keys("1234")

link3 = driver.find_element_by_xpath('/html/body/div/form/div[1]/button')
link3.click()

link4=driver.find_element_by_xpath('//*[@id="header"]/div/div/div[2]/ul/li[2]/a')
link4.click()

time.sleep(1)

#link5=driver.find_element_by_xpath('//*[@id="hero"]/div/div[2]/button')
#link5.click()

time.sleep(1)

elem = driver.find_element_by_xpath('//*[@id="hero"]/div/h1[2]')
if(elem.text=="Genre: Rock"):
	print("Genre is matched")
else:
	print("Not Matched ! Expected Genre: Rock , Received:"+ elem.text)
x = input()











