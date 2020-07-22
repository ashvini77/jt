package com.jticketing.testCases;

import java.lang.reflect.Method;

import org.testng.annotations.Test;

import com.jticketing.dataproviders.DataProviderClass;
import com.jticketing.pages.OfflineEventPage;
import com.jticketing.testbase.TestBase;

public class OfflineEventPageTest extends TestBase {
	
	@Test(dataProvider = "createofflineevent", dataProviderClass = DataProviderClass.class)
	
	public void offlineeventcreation(String eventtitle, String eventstartdate, String eventenddate,
			String eventdescription, String bookingstartdate, String bookingenddate, String firsttickettitle, String firstticketprice, 
			String firstticketenddate, String firstattendeefieldtitle, Method method) throws Exception {
		
		logger = extent.createTest(method.getName().toString());
		OfflineEventPage event = new OfflineEventPage(driver);
	
		event.CreateOfflineEvent(eventtitle, eventstartdate, eventenddate, eventdescription, bookingstartdate, bookingenddate, firsttickettitle, firstticketprice, firstticketenddate, firstattendeefieldtitle);
			
	}

}
