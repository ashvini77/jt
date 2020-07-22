package com.jticketing.testCases;

import java.lang.reflect.Method;

import org.testng.annotations.Test;

import com.jticketing.dataproviders.DataProviderClass;
import com.jticketing.pages.UnpublishedEventPage;
import com.jticketing.testbase.TestBase;

public class UnpublishedEventPageTest extends TestBase{
	
@Test(dataProvider = "unpublishedevent", dataProviderClass = DataProviderClass.class)
	
	public void CreateUnpublishedEvent(String eventtitle, String eventstartdate, String eventenddate, String bookingstartdate, String bookingenddate, String firsttickettitle,
			String firstticketprice, String firstticketenddate, Method method) throws InterruptedException {
		
		logger = extent.createTest(method.getName().toString());
		UnpublishedEventPage event = new UnpublishedEventPage(driver);
		
		event.CreateUnpublishedEvent(eventtitle, eventstartdate, eventenddate, bookingstartdate, bookingenddate, firsttickettitle, firstticketprice, firstticketenddate);
          }

}
