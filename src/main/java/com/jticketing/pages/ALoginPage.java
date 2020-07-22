package com.jticketing.pages;

import org.openqa.selenium.WebDriver;
import org.openqa.selenium.WebElement;
import org.openqa.selenium.support.FindBy;
import org.openqa.selenium.support.How;
import org.openqa.selenium.support.PageFactory;

import com.jticketing.testbase.TestBase;

public class ALoginPage extends TestBase{

	public ALoginPage(WebDriver driver) {

		PageFactory.initElements(driver, this);

	}
	 
	@FindBy(how = How.ID, using = "mod-login-username")
	public WebElement Username;
	
	@FindBy(how = How.XPATH, using = "//*[@id=\"mod-login-password\"]")
	public WebElement Password;
	
	@FindBy(how = How.XPATH, using = "//button[@class='btn btn-primary btn-block btn-large login-button']")
	public WebElement LoginButton;
	
	
	public void adminlogin(String username, String password) {
		EnterValue(Username, username);
		EnterValue(Password, password);
		ButtonClick(LoginButton);
		logger.pass("Admin has succesfully logged in");
	}
	
}
