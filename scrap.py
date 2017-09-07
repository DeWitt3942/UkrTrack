import sys
from selenium import webdriver
from selenium.webdriver.common.keys import Keys
from selenium.common.exceptions import TimeoutException
from selenium.webdriver.support.ui import WebDriverWait
from selenium.webdriver.support import expected_conditions as EC
from selenium.webdriver.common.by import By
from selenium.webdriver.support.ui import WebDriverWait
from pyvirtualdisplay import Display
display = Display(visible=0, size=(800, 800))  
display.start()

def write_unicode(text, charset='utf-8'):
    return text.encode(charset)

input_file = open('data.tx','r')
output_file = open('data.out', 'w')
text = input_file.read()
driver = webdriver.Chrome()

wait = WebDriverWait(driver, 5);
driver.get("http://services.ukrposhta.ua/bardcodesingle/")
elem = driver.find_element_by_xpath('//*[@id="ctl00_centerContent_txtBarcode"]')
url0 = driver.current_url
#elem.clear()
elem.send_keys(text)
button = driver.find_element_by_xpath('//*[@id="ctl00_centerContent_btnFindBarcodeInfo"]')
button.click()
timeout = 5
try:
	try:
			alert = driver.switch_to_alert()
			alert.accept()
	except:
		pass

	#wait.until(EC.alert_is_present());
	while driver.current_url == url0:
		WebDriverWait(driver, timeout)
	text = driver.find_element_by_xpath('//*[@id="ctl00_centerContent_divInfo"]')

	print(	write_unicode(text.text))
finally:
	driver.close()
