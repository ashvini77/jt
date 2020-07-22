package com.jticketing.testCases;

import org.testng.annotations.Test;
import java.lang.reflect.Method;

import com.jticketing.dataproviders.DataProviderClass;
import com.jticketing.pages.ALoginPage;
import com.jticketing.testbase.TestBase;

public class ALoginTest extends TestBase {

	@Test(dataProvider = "adminlogin", dataProviderClass = DataProviderClass.class)

	public void adminLogin(String username, String password, Method method) {
				
		logger = extent.createTest(method.getName().toString());

		ALoginPage login = new ALoginPage(driver);

		driver.get(properties.getProperty("url") + properties.getProperty("admin"));
		
		//driver.get(properties.getProperty("url"));

			login.adminlogin(username, password);
	}

}