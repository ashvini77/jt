package com.jticketing.testCases;

import java.lang.reflect.Method;

import org.testng.annotations.Test;

import com.jticketing.dataproviders.DataProviderClass;
import com.jticketing.pages.Event_AttendeeFieldNotRequiredPage;
import com.jticketing.testbase.TestBase;

public class Event_AttendeeFieldNotRequiredPageTest extends TestBase{

@Test(dataProvider = "eventattendeefieldnotrequired", dataProviderClass = DataProviderClass.class)
	
	public void eventcreation(String eventtitle, String eventstartdate, String eventenddate,
			String bookingstartdate, String bookingenddate, String firsttickettitle, String firstticketprice, String firstticketenddate,
			String firstattendeefieldtitle, Method method) throws Exception {
		
		logger = extent.createTest(method.getName().toString());
		
		Event_AttendeeFieldNotRequiredPage event = new Event_AttendeeFieldNotRequiredPage();
		
		event.CreateEventWithAttendeeFieldNoTRequired(eventtitle, eventstartdate, eventenddate, bookingstartdate, bookingenddate, firsttickettitle, firstticketprice, firstticketenddate, firstattendeefieldtitle);
			
	}
	
}
