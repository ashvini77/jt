package com.jticketing.pages;

import org.openqa.selenium.WebDriver;
import org.openqa.selenium.support.ui.ExpectedConditions;
import org.openqa.selenium.support.ui.WebDriverWait;

import com.jticketing.testbase.TestBase;

public class PublishedEventPage extends TestBase{

	public PublishedEventPage(WebDriver driver) {
		super();
	}
	
	CreateEventPage event = new CreateEventPage(driver);
	
	public void CreatePublishedEvent(String eventtitle, String eventstartdate, String eventenddate, String bookingstartdate, String bookingenddate, String firsttickettitle,
			String firstticketprice, String firstticketenddate) throws InterruptedException {
        
		WebDriverWait wait = new WebDriverWait(driver,20);
		
		wait.until(ExpectedConditions.visibilityOf(event.NewEvent));
		ButtonClick(event.NewEvent);
		ButtonClick(event.EventDetails);
		EnterValue(event.Title, eventtitle);
		ClearAndEnterValue(event.EventStartDate, eventstartdate);
		ClearAndEnterValue(event.EventEndDate, eventenddate);
		event.SelectCreator();
		SelectDropdownValue(event.SelectEventCategory, event.SecondEventCategory);
		SelectDropdownValue(event.EventVenue, event.SecondEventVenue);
		SelectRadioButton(event.PublishEvent);
		ScrollDown1();
		SelectDropdownValue(event.SelectAccess, event.AccessPublic);
		SelectRadioButton(event.EnableSeeEventAttendee);
		ScrollDown2();
	    ButtonClick(event.BookingTimingandOtherInfo);
		ClearAndEnterValue(event.BookingStartDate, bookingstartdate);
		ClearAndEnterValue(event.BookingEndDate, bookingenddate);
		ScrollUp1();
		ButtonClick(event.TicketTypes);
		ClearAndEnterValue(event.FirstTicketTitle, firsttickettitle);
	    ClearAndEnterValue(event.FirstTicketPrice, firstticketprice);
	    ClearAndEnterValue(event.FirstTickeEndDate, firstticketenddate );
	    ScrollUp2();
		ButtonClick(event.SaveandClose);
		logger.pass("Published event has created successfully");
	}

}
