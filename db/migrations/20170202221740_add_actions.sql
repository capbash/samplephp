CREATE TABLE actions (
  id integer NOT NULL,
  name character varying(255),
  entity_type character varying(255),
  entity_id character varying(255),
  data jsonb,
  inserted_at timestamp without time zone NOT NULL,
  updated_at timestamp without time zone NOT NULL
);

CREATE SEQUENCE actions_id_seq
  START WITH 1
  INCREMENT BY 1
  NO MINVALUE
  NO MAXVALUE
  CACHE 1;

ALTER TABLE actions ALTER COLUMN id SET DEFAULT nextval('actions_id_seq'::regclass);
ALTER TABLE actions
  ADD CONSTRAINT actions_pkey PRIMARY KEY (id);
