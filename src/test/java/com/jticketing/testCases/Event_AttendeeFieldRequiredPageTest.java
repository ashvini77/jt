package com.jticketing.testCases;

import java.lang.reflect.Method;

import org.testng.annotations.Test;

import com.jticketing.dataproviders.DataProviderClass;
import com.jticketing.pages.Event_AttendeeFieldRequiredPage;
import com.jticketing.testbase.TestBase;

public class Event_AttendeeFieldRequiredPageTest extends TestBase{

@Test(dataProvider = "eventattendeefieldrequired", dataProviderClass = DataProviderClass.class)
	
	public void eventcreation(String eventtitle, String eventstartdate, String eventenddate,
			String bookingstartdate, String bookingenddate, String firsttickettitle, String firstticketprice, String firstticketenddate,
			String firstattendeefieldtitle, Method method) throws Exception {
		
		logger = extent.createTest(method.getName().toString());
		
		Event_AttendeeFieldRequiredPage event = new Event_AttendeeFieldRequiredPage();
		
		event.CreateEventWithAttendeeFieldRequired(eventtitle, eventstartdate, eventenddate, bookingstartdate, bookingenddate, firsttickettitle, firstticketprice, firstticketenddate, firstattendeefieldtitle);
			
	}
	
}
