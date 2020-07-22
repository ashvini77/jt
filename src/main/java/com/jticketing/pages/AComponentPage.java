package com.jticketing.pages;

import org.openqa.selenium.WebDriver;
import org.openqa.selenium.WebElement;
import org.openqa.selenium.support.FindBy;
import org.openqa.selenium.support.How;
import org.openqa.selenium.support.PageFactory;
import org.openqa.selenium.support.ui.ExpectedConditions;
import org.openqa.selenium.support.ui.WebDriverWait;

import com.jticketing.testbase.TestBase;

public class AComponentPage extends TestBase{

	public AComponentPage(WebDriver driver) {

		TestBase.driver = driver;
		
		PageFactory.initElements(driver, this);
	}

	@FindBy(how = How.XPATH, using = "//*[@id=\"menu\"]/li[5]/a")
	public WebElement Components;
	
	@FindBy(how = How.XPATH, using = "//a[.//text()=\"JTicketing\"]")
	public WebElement JticketingComp;
	
	
	public AComponentPage component() {
		WebDriverWait wait = new WebDriverWait(driver,20);
		wait.until(ExpectedConditions.visibilityOf(Components));
		ButtonClick(Components);
		wait.until(ExpectedConditions.visibilityOf(JticketingComp));
		ButtonClick(JticketingComp);
		return null;
	}
	
}
