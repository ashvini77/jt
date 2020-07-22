package com.jticketing.pages;

import org.openqa.selenium.support.ui.ExpectedConditions;
import org.openqa.selenium.support.ui.WebDriverWait;

import com.jticketing.testbase.TestBase;

public class Event_MoreThanOneTicketPage extends TestBase{

	CreateEventPage event = new CreateEventPage(driver);
	
	public void CreateEventWithMoreThanOneTicket(String eventtitle, String eventstartdate, String eventenddate,
			String bookingstartdate, String bookingenddate, String firsttickettitle, String firstticketdescription, String firstticketprice, String firstticketenddate,
			String firstticketseatscount, String secondtickettitle, String secondticketdescription, String secondticketprice, String secondticketenddate, String secondticketseatscount, 
			String firstattendeefieldtitle) throws InterruptedException {
        
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
		EnterValue(event.FirstTicketDescription, firstticketdescription);
	    SelectDropdownValue(event.FirstTicketStatus, event.FirstTicketStatusPublish);
	    ClearAndEnterValue(event.FirstTicketPrice, firstticketprice);
	    ClearAndEnterValue(event.FirstTickeEndDate, firstticketenddate );
	    SelectDropdownValue(event.FirstTicketSeatsAvailability, event.FirstTicketLimitedSeats);
	    EnterValue(event.FirstTicketSeatsCount, firstticketseatscount);
		ScrollUp2();
		ButtonClick(event.AddTicket);
		ClearAndEnterValue(event.SecondTicketTitle, secondtickettitle);
		EnterValue(event.SecondTicketDescription, secondticketdescription);
	    SelectDropdownValue(event.SecondTicketStatus, event.SecondTicketStatusPublish);
	    ClearAndEnterValue(event.SecondTicketPrice, secondticketprice);
	    ClearAndEnterValue(event.SecondTickeEndDate, secondticketenddate );
	    SelectDropdownValue(event.SecondTicketSeatsAvailability, event.SecondTicketLimitedSeats);
	    EnterValue(event.SecondTicketSeatsCount, secondticketseatscount);
	    ScrollUp3();
	    ButtonClick(event.AttendeeFields);
		EnterValue(event.FirstAttendeeFieldTitle, firstattendeefieldtitle);
		SelectDropdownValue(event.SelectFirstAttendeeFieldType, event.FirstAttendeeFieldTypeText);
		ScrollDown3();
		SelectDropdownValue(event.SelectFirstAttendeeFieldRequired, event.FirstAttendeeFieldRequiredYes);
		ButtonClick(event.SaveandClose);
		logger.pass("Event has created successfully with more than one ticket");
	}
	
	
}
