package com.jticketing.testCases;

import java.lang.reflect.Method;

import org.testng.annotations.Test;

import com.jticketing.dataproviders.DataProviderClass;
import com.jticketing.pages.Event_MoreThanOneAttendeePage;
import com.jticketing.testbase.TestBase;

public class Event_MoreThanOneAttendeePageTest extends TestBase{
	
@Test(dataProvider = "eventmorethanoneattendee", dataProviderClass = DataProviderClass.class)
	
	public void eventcreation(String eventtitle, String eventstartdate, String eventenddate,
			String bookingstartdate, String bookingenddate, String firsttickettitle, String firstticketprice, String firstticketenddate,
			String firstattendeefieldtitle, String secondattendeefieldtitle, Method method) throws Exception {
		
		logger = extent.createTest(method.getName().toString());
		
		Event_MoreThanOneAttendeePage event = new Event_MoreThanOneAttendeePage();
		
		event.CreateEventWithMoreThanOneAttendeeField(eventtitle, eventstartdate, eventenddate, bookingstartdate, bookingenddate, firsttickettitle, firstticketprice, firstticketenddate, firstattendeefieldtitle, secondattendeefieldtitle);
			
	}

}
