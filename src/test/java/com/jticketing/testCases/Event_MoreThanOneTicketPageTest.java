package com.jticketing.testCases;

import java.lang.reflect.Method;

import org.testng.annotations.Test;

import com.jticketing.dataproviders.DataProviderClass;
import com.jticketing.pages.Event_MoreThanOneTicketPage;
import com.jticketing.testbase.TestBase;

public class Event_MoreThanOneTicketPageTest extends TestBase{

@Test(dataProvider = "eventmorethanoneticket", dataProviderClass = DataProviderClass.class)
	
	public void eventcreation(String eventtitle, String eventstartdate, String eventenddate, 
			String bookingstartdate, String bookingenddate, String firsttickettitle, String firstticketdescription, String firstticketprice, String firstticketenddate,
			String firstticketseatscount, String secondtickettitle, String secondticketdescription, String secondticketprice, String secondticketenddate, String secondticketseatscount, 
			String firstattendeefieldtitle, Method method) throws Exception {
		
		logger = extent.createTest(method.getName().toString());
		Event_MoreThanOneTicketPage event = new Event_MoreThanOneTicketPage();
		
		event.CreateEventWithMoreThanOneTicket(eventtitle, eventstartdate, eventenddate, bookingstartdate, bookingenddate, firsttickettitle, firstticketdescription, firstticketprice, firstticketenddate, firstticketseatscount, secondtickettitle, secondticketdescription, secondticketprice, secondticketenddate, secondticketseatscount, firstattendeefieldtitle);
			
	}
	
}
