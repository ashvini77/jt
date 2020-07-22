package com.jticketing.testCases;

import java.lang.reflect.Method;

import org.testng.annotations.Test;

import com.jticketing.dataproviders.DataProviderClass;
import com.jticketing.pages.Event_DenySeeEventAttendeePage;
import com.jticketing.testbase.TestBase;

public class Event_DenySeeEventAttendeePageTest extends TestBase{
	
@Test(dataProvider = "denyseeeventattendee", dataProviderClass = DataProviderClass.class)
	
	public void eventcreation(String eventtitle, String eventstartdate, String eventenddate,
			String bookingstartdate, String bookingenddate, String firsttickettitle, String firstticketprice, String firstticketenddate, Method method) throws Exception {
		
		logger = extent.createTest(method.getName().toString());
		
		Event_DenySeeEventAttendeePage event = new Event_DenySeeEventAttendeePage();
		
		event.CreateEventWithDenySeeEventAttendee(eventtitle, eventstartdate, eventenddate, bookingstartdate, bookingenddate, firsttickettitle, firstticketprice, firstticketenddate);
	    
	}

}
