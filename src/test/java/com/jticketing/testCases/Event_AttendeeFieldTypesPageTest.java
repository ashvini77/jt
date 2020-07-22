package com.jticketing.testCases;

import java.lang.reflect.Method;

import org.testng.annotations.Test;

import com.jticketing.dataproviders.DataProviderClass;
import com.jticketing.pages.Event_AttendeeFieldTypesPage;
import com.jticketing.testbase.TestBase;

public class Event_AttendeeFieldTypesPageTest extends TestBase{

@Test(dataProvider = "eventattendeefieldtypes", dataProviderClass = DataProviderClass.class)
	
	public void eventcreation(String eventtitle, String eventstartdate, String eventenddate,
			String bookingstartdate, String bookingenddate, String firsttickettitle, String firstticketprice, String firstticketenddate,
			String firstattendeefieldtitle, String options, Method method) throws Exception {
		
		logger = extent.createTest(method.getName().toString());
		
		Event_AttendeeFieldTypesPage event = new Event_AttendeeFieldTypesPage();
		
		if(eventtitle.equals("Text")) {
			event.CreateEventWithAttendeeFieldTypeText(eventtitle, eventstartdate, eventenddate, bookingstartdate, bookingenddate, firsttickettitle, firstticketprice, firstticketenddate, firstattendeefieldtitle);
		}
			
		if(eventtitle.equals("TextArea")) {
			event.CreateEventWithAttendeeFieldTypeTextArea(eventtitle, eventstartdate, eventenddate, bookingstartdate, bookingenddate, firsttickettitle, firstticketprice, firstticketenddate, firstattendeefieldtitle);
		}
		
		if(eventtitle.equals("Date")) {
			event.CreateEventWithAttendeeFieldTypeDate(eventtitle, eventstartdate, eventenddate, bookingstartdate, bookingenddate, firsttickettitle, firstticketprice, firstticketenddate, firstattendeefieldtitle);
		}
		
		if(eventtitle.equals("Single Select")) {
			event.CreateEventWithAttendeeFieldTypeSingleSelect(eventtitle, eventstartdate, eventenddate, bookingstartdate, bookingenddate, firsttickettitle, firstticketprice, firstticketenddate, firstattendeefieldtitle, options);
		}
		
	}
	
}
