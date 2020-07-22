package com.jticketing.testCases;

import java.lang.reflect.Method;

import org.testng.annotations.Test;

import com.jticketing.dataproviders.DataProviderClass;
import com.jticketing.pages.PublishedEventPage;
import com.jticketing.testbase.TestBase;

public class PublishedEventPageTest extends TestBase{

@Test(dataProvider = "publishedevent", dataProviderClass = DataProviderClass.class)
	
	public void CreatePublishedEvent(String eventtitle, String eventstartdate, String eventenddate, String bookingstartdate, String bookingenddate, String firsttickettitle,
			String firstticketprice, String firstticketenddate, Method method) throws InterruptedException {
		
		logger = extent.createTest(method.getName().toString());
		PublishedEventPage event = new PublishedEventPage(driver);
		
		event.CreatePublishedEvent(eventtitle, eventstartdate, eventenddate, bookingstartdate, bookingenddate, firsttickettitle, firstticketprice, firstticketenddate);
          }
}


