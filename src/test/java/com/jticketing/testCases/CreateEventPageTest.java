package com.jticketing.testCases;
import java.lang.reflect.Method;
import org.testng.annotations.Test;

import com.jticketing.dataproviders.DataProviderClass;
import com.jticketing.pages.CreateEventPage;
import com.jticketing.testbase.TestBase;
public class CreateEventPageTest extends TestBase{
	
	@Test(dataProvider = "admineventcreation", dataProviderClass = DataProviderClass.class)
	
	public void eventcreation(String eventtitle, String eventstartdate, String eventenddate, String firsttickettitle, String firstticketprice, Method method) throws Exception {
		
		logger = extent.createTest(method.getName().toString());
		CreateEventPage event = new CreateEventPage(driver);
	
		event.CreateEventWithRequiredFields(eventtitle, eventstartdate, eventenddate, firsttickettitle, firstticketprice);
			
	}
}