package com.jticketing.testCases;

import java.lang.reflect.Method;

import org.testng.annotations.Test;

import com.jticketing.dataproviders.DataProviderClass;
import com.jticketing.pages.Event_AllowSeeEventAttendeePage;
import com.jticketing.testbase.TestBase;

public class Event_AllowSeeEventAttendeePageTest extends TestBase{

@Test(dataProvider = "allowseeeventattendee", dataProviderClass = DataProviderClass.class)
	
	public void eventcreation(String eventtitle, String eventstartdate, String eventenddate,
			String bookingstartdate, String bookingenddate, String firsttickettitle, String firstticketprice, String firstticketenddate, Method method) throws Exception {
		
		logger = extent.createTest(method.getName().toString());
		
		Event_AllowSeeEventAttendeePage event = new Event_AllowSeeEventAttendeePage();
		
		event.CreateEventWithAllowSeeEventAttendee(eventtitle, eventstartdate, eventenddate, bookingstartdate, bookingenddate, firsttickettitle, firstticketprice, firstticketenddate);
			
	}
	
}
