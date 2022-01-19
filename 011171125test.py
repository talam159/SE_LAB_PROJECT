from selenium import webdriver
from selenium.webdriver.common.keys import Keys
from webdriver_manager.chrome import ChromeDriverManager
import time

driver = webdriver.Chrome(ChromeDriverManager().install())
driver.get("http://localhost/SELAB/SE_LAB_PROJECT/index.php")
driver.maximize_window()


link1 = driver.find_element_by_xpath('//*[@id="header"]/div/div/div[2]/ul/div[2]/li/button')
link1.click()

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



time.sleep(3)

post = driver.find_element_by_xpath('//*[@id="post"]/div[2]/p')
if(post.text=="Concert alert!"):
	print("Test case passed")
else:
	print("Test case failed! Expected: we are coming on 18th DEC, Received: " + post.text)
x = input()











