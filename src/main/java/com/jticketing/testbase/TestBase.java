package com.jticketing.testbase;

import java.io.FileInputStream;
import java.io.IOException;
import java.util.Properties;
import java.util.concurrent.TimeUnit;

import org.openqa.selenium.JavascriptExecutor;
import org.openqa.selenium.WebDriver;
import org.openqa.selenium.WebElement;
import org.openqa.selenium.chrome.ChromeDriver;
import org.openqa.selenium.support.ui.ExpectedConditions;
import org.openqa.selenium.support.ui.WebDriverWait;
import org.testng.annotations.AfterClass;
import org.testng.annotations.AfterMethod;
import org.testng.annotations.AfterSuite;
import org.testng.annotations.BeforeClass;
import org.testng.annotations.BeforeSuite;

import com.aventstack.extentreports.ExtentReports;
import com.aventstack.extentreports.ExtentTest;
import com.aventstack.extentreports.reporter.ExtentHtmlReporter;
import com.jticketing.utility.Constants;

import io.github.bonigarcia.wdm.WebDriverManager;

public class TestBase {

	public static Properties properties;

	public static WebDriver driver;

	public static ExtentHtmlReporter htmlReporter;

	public static ExtentReports extent;

	public static ExtentTest logger;
	
	public void ButtonClick(WebElement name){
		name.click();
	}
	
	public void SelectDropdownValue(WebElement name1, WebElement name2) {
        WebDriverWait wait = new WebDriverWait(driver,20);
		
		name1.click();
		wait.until(ExpectedConditions.visibilityOf(name2));
		name2.click();
	}
	
	public void EnterValue(WebElement name, String value) {
		name.sendKeys(value);
	}
	
	public void ClearAndEnterValue(WebElement name, String value) {
		name.clear();
		name.sendKeys(value);
	}
	
	public void EnterValueInIframe(WebElement name, String value) {
		driver.switchTo().frame(name);
		WebElement editable = driver.switchTo().activeElement();
		editable.sendKeys(value);
		driver.switchTo().defaultContent();
	}
	
	public void ScrollDown1() {
		JavascriptExecutor js1 = (JavascriptExecutor) driver;
		js1.executeScript("window.scrollBy(0,90000)");
	}
	
    public void ScrollDown2() {
    	JavascriptExecutor js2 = (JavascriptExecutor) driver;
		js2.executeScript("window.scrollBy(0,100000)");
	}
    
    public void ScrollDown3() {
    	JavascriptExecutor js3 = (JavascriptExecutor) driver;
		js3.executeScript("window.scrollBy(0,90000)");
	}
    
    public void ScrollDown4() {
    	JavascriptExecutor js4 = (JavascriptExecutor) driver;
		js4.executeScript("window.scrollBy(0,200000)");
	}
    
    public void ScrollUp1() {
    	JavascriptExecutor jse1 = (JavascriptExecutor)driver;
		jse1.executeScript("window.scrollBy(0,250)", "");
		jse1.executeScript("window.scrollBy(0,-1000)", "");
    }
    
    public void ScrollUp2() {
    	JavascriptExecutor jse2 = (JavascriptExecutor)driver;
		jse2.executeScript("window.scrollBy(0,250)", "");
		jse2.executeScript("window.scrollBy(0,-1000)", "");
    }
    
    public void ScrollUp3() {
    	JavascriptExecutor jse3 = (JavascriptExecutor)driver;
		jse3.executeScript("window.scrollBy(0,250)", "");
		jse3.executeScript("window.scrollBy(0,-1000)", "");
    }
    
    public void SelectRadioButton(WebElement name) {
    	name.click();
    }

	@BeforeSuite
	public void beforeSuite() throws IOException {

		htmlReporter = new ExtentHtmlReporter("AutomationReport.html");

		extent = new ExtentReports();

		extent.attachReporter(htmlReporter);

		properties = new Properties();

		FileInputStream fis = new FileInputStream(
				System.getProperty("user.dir") + "/src/main/java/com/jticketing/config/properties.properties");

		properties.load(fis);

		WebDriverManager.chromedriver().setup();
		
		driver = new ChromeDriver();

		driver.manage().window().maximize();

		driver.manage().deleteAllCookies();

		driver.manage().timeouts().implicitlyWait(60, TimeUnit.SECONDS);

		System.out.println("Site URL is:" + Constants.SITEURL);
		try {
			if (!Constants.SITEURL.isEmpty())
				driver.get(Constants.SITEURL);
		} catch (Exception e) {

			driver.get(properties.getProperty("url"));

		}

	}

	@BeforeClass
	public void beforeClass() {

	}

	@AfterMethod
	public void afterMethod() {

	}

	@AfterClass
	public void afterClass() {
		
	}

	@AfterSuite
	public void afterSuite() {

		//driver.close();

		extent.flush();

	}
	
	
}
