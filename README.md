# JU-Medical-Management-System


Jahangirnagar University has its own Medical Centre for the students, the
teachers and the staffs. The center provides twenty-four-hour service. It is
supervised by the Chief Medical Officer with a staff of qualified doctors. The
center bears all expenses related to treatment in case of students. But it provides
only health-related advice in case of the teachers and the staff.
There are 12 doctors, 20 staffs to maintain the medical center and serve the
students and teachers. Here the authority offers the free treatment, medicine and
suggestions to the students but there is no accommodation for serious patients.
Our goal of this project is to create a database to manage this center digitally. We
want to list all the doctors and patients in a database and keep track of appoints,
treatments, medication etc. Which will improve student’s overall health and
hopefully save time and resources for Medical center.


## Scenario:


With this project, we can store information of Doctors, Patients and staffs working
in JU Medical Center. We can also track available beds, tests done in the hospital,
Ambulance and Medicines.
In the hospital, Each Doctor has a unique id (D_ID), name (Name), gender (Gender)
and working day (Work day) stored in the database. Each doctor attends patient
based on their specialty (Specialty). Each patient has a unique id (P_ID), name
(P_name), gender (Gender), age (Age) and either the patient is a teacher or
student(P_type). Patients can get tests in the center if necessary. Each test has a
unique test id(T_ID) and a name(T_name). Tests are governed by staffs. They have a
staff id(S_ID), name(S_name), gender(Gender) and working day(Work day) stored
in the database. Patients also receives medicine which has a medicine
code(M_code) and quantity(Quantity). Doctor can also admit patient to beds that
has bed number(Bed number). We will also keep track if the bed is available or
not(Bed Status). Serious patients can also be referred to other hospital using
ambulance. Each Ambulance has a ambulance number(Amb_ID) and we will also
track if that ambulance is present or not.(Amb status).


