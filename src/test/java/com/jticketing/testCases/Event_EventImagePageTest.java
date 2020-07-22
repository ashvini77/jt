package com.jticketing.testCases;

import java.lang.reflect.Method;

import org.testng.annotations.Test;

import com.jticketing.dataproviders.DataProviderClass;
import com.jticketing.pages.Event_EventImagePage;
import com.jticketing.testbase.TestBase;

public class Event_EventImagePageTest extends TestBase{
	
@Test(dataProvider = "eventwitheventimage", dataProviderClass = DataProviderClass.class)
	
	public void eventwithouttickettype(String eventtitle, String eventstartdate, String eventenddate, String eventimage,
			String eventdescription, String bookingstartdate, String bookingenddate, String firsttickettitle, String firstticketprice, String firstticketenddate, Method method) throws Exception {
		
		logger = extent.createTest(method.getName().toString());
		Event_EventImagePage event = new Event_EventImagePage(driver);
	
		event.CreateEventWithEventImage(eventtitle, eventstartdate, eventenddate, eventimage, eventdescription, bookingstartdate, bookingenddate, firsttickettitle, firstticketprice, firstticketenddate);

	}

}
