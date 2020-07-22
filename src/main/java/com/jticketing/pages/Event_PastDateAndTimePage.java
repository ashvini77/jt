package com.jticketing.pages;

import org.openqa.selenium.support.ui.ExpectedConditions;
import org.openqa.selenium.support.ui.WebDriverWait;

import com.jticketing.testbase.TestBase;

public class Event_PastDateAndTimePage extends TestBase{
	
	CreateEventPage event = new CreateEventPage(driver);
	
	
	public void CreateEventWithPastDateAndTime(String eventtitle, String eventstartdate, String eventenddate,String bookingstartdate, String bookingenddate) throws InterruptedException {
        
		WebDriverWait wait = new WebDriverWait(driver,20);
		
		ButtonClick(event.Events);
		wait.until(ExpectedConditions.visibilityOf(event.NewEvent));
		ButtonClick(event.NewEvent);
		ButtonClick(event.EventDetails);
		EnterValue(event.Title, eventtitle);
		ClearAndEnterValue(event.EventStartDate, eventstartdate);
		ClearAndEnterValue(event.EventEndDate, eventenddate);
		SelectDropdownValue(event.SelectEventCategory, event.SecondEventCategory);
		SelectDropdownValue(event.EventVenue, event.SecondEventVenue);
		ScrollDown1();
	    ButtonClick(event.BookingTimingandOtherInfo);
		ClearAndEnterValue(event.BookingStartDate, bookingstartdate);
		ClearAndEnterValue(event.BookingEndDate, bookingenddate);
		ScrollUp1();
		ButtonClick(event.SaveandClose);
		logger.pass("Event has created successfully with past date and time in event start date and enddate");
	}
	

}
